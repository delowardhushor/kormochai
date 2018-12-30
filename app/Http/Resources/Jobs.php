<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Jobs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'employers_id' => $this->employers_id,
            'company_name' => $this->company_name,
            'job_title' => $this->job_title,
            'education' => $this->education,
            'salary' => $this->salary,
            'office_hour' => $this->office_hour,
            'location' => $this->location,
            'job_responsibility' => $this->job_responsibility,
            'interview' => $this->interview,
            'interview_date' => $this->interview_date,
            'job_date' => $this->job_date,
            'job_type' => $this->job_type,
            'Employees' => $this->employees,
        ];
    }
}
