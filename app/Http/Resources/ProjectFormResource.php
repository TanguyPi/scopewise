<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectFormResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'team' => $this->team,
            'experience' => $this->experience,
            'stack' => json_encode($this->stack),
            'design' => $this->design,
            'description' => $this->description,
            'features' => $this->features,
            'qa' => $this->qa,
            'docker' => $this->docker,
            'hosting' => json_encode($this->hosting),
            'devops' => $this->devops

        ];
    }
}
