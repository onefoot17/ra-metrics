<?php

namespace App\Services\Plants;

use App\Services\Plants\Contracts\PlantServiceInterface;

use App\Repositories\Plants\Contracts\PlantParentSpecieRepositoryInterface;
use App\Repositories\Plants\Contracts\PlantTypeRepositoryInterface;
use App\Repositories\Plants\Contracts\PlantRepositoryInterface;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use Str;

class PlantService implements PlantServiceInterface
{
    // Plant Parents Species

    public function __construct(
        PlantParentSpecieRepositoryInterface $plantParentSpecieRepository,
        PlantTypeRepositoryInterface $plantTypeRepository,
        PlantRepositoryInterface $plantRepository
    )
    {
        $this->plantParentSpecieRepository = $plantParentSpecieRepository;
        $this->plantTypeRepository = $plantTypeRepository;
        $this->plantRepository = $plantRepository;
    }

    public function getPlantParentSpecie($id)
    {
        $plantParentSpecie = $this->plantParentSpecieRepository->show($id);

        return $plantParentSpecie;
    }

    public function getPlantParentsSpecies()
    {
        $plantParentsSpecies = $this->plantParentSpecieRepository->list();

        return $plantParentsSpecies;
    }

    public function getPlantParentsSpeciesLimitedCharacters()
    {
        $parentSpecies = $this->getPlantParentsSpecies();

        foreach($parentSpecies as $ind => $parentSpeciesCollection){
            $parentSpeciesCollection->comments_less = Str::limit($parentSpeciesCollection->comments, 100, '...');
        }

        return $parentSpecies;
    }

    public function updatePlantParentSpecie($request, $id)
    {
        $validator = Validator::make($request->all(), [
            'plant_parent_name' => 'required|min:5',
            'comments' => 'min:5|max:255'
        ]);

        if($validator->fails()){
            $update = $validator->errors();
        } else {
            $current_image_path = $this->getPlantParentSpecie($id);

            if(!is_null($request->image)){
                $request->image_path = $this->saveImage($request);

                Storage::delete($current_image_path->image_path);

            } else {
                $request->image_path = $current_image_path->image_path;
            }

            $update = $this->plantParentSpecieRepository->update($request, $id);
        }

        return $update;
    }

    public function storePlantParentSpecie($request)
    {
        $validator = Validator::make($request->all(), [
            'plant_parent_name' => 'required|min:5',
            'image' => 'required',
            'comments' => 'min:5|max:255'
        ]);

        if($validator->fails()){
            $insert = $validator->errors();
        } else {
            $image_path = $this->saveImage($request);
            $request->image_path = (!is_null($image_path))?$image_path:null;
            $insert = $this->plantParentSpecieRepository->store($request);
        }

        return $insert;
    }

    public function saveImage($request)
    {
        $path = Storage::disk('local')->putFile('public/images/plant_parents', $request->file('image'));
        
        Storage::setVisibility($path, 'public');

        return $path;
    }

    public function destroyPlantParentSpecie($id)
    {
        $destroy = $this->plantParentSpecieRepository->destroy($id);

        return $destroy;
    }


    // Plant Types

    public function getPlantType($id)
    {
        $plantType = $this->plantTypeRepository->show($id);

        return $plantType;
    }

    public function getPlantTypes()
    {
        $plantType = $this->plantTypeRepository->list();

        return $plantType;
    }

    public function getTypesLimitedCharacters()
    {
        $parentTypes = $this->getPlantTypes();

        foreach($parentTypes as $ind => $parentTypesCollection){
            $parentTypesCollection->comments_less = Str::limit($parentTypesCollection->comments, 100, '...');
        }

        return $parentTypes;
    }

    public function updatePlantType($request, $id)
    {
        $validator = Validator::make($request->all(), [
            'characteristic' => 'required|min:5',
            'comments' => 'min:5|max:255'
        ]);

        if($validator->fails()){
            $update = $validator->errors();
        } else {
            $update = $this->plantTypeRepository->update($request, $id);
        }

        return $update;
    }

    public function storePlantType($request)
    {
        $validator = Validator::make($request->all(), [
            'characteristic' => 'required|min:5',
            'comments' => 'min:5|max:255'
        ]);

        if($validator->fails()){
            $insert = $validator->errors();
        } else {
            $insert = $this->plantTypeRepository->store($request);
        }

        return $insert;
    }

    public function destroyPlantType($id)
    {
        $destroy = $this->plantTypeRepository->destroy($id);

        return $destroy;
    }

    // Plants

    public function getPlant($id)
    {
        $plant = $this->plantRepository->show($id);

        return $plant;
    }

    public function getPlants()
    {
        $plant = $this->plantRepository->list();

        return $plant;
    }

    public function getPlantsLimitedCharacters()
    {
        $plants = $this->getPlants();

        foreach($plants as $ind => $plantsCollection){
            $plantsCollection->comments_less = Str::limit($plantsCollection->comments, 100, '...');
        }

        return $plants;
    }

    public function updatePlant($request, $id)
    {
        $update = $this->plantRepository->update($request, $id);

        return $update;
    }

    public function storePlant($request)
    {
        $validator = Validator::make($request->all(), [
            'plant_parent_specieid' => 'required',
            'plant_typeid' => 'required',
            'comments' => 'min:5|max:255'
        ]);

        if($validator->fails()){
            $insert = $validator->errors();
        } else {
            $insert = $this->plantRepository->store($request);
        }

        return $insert;
    }

    public function destroyPlant($id)
    {
        $destroy = $this->plantRepository->destroy($id);

        return $destroy;
    }
}
