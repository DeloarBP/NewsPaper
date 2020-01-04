<?php
namespace App\Http\Resources\Backend\Configurations;
use Illuminate\Http\Resources\Json\JsonResource;
class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'id' => $this->id,
            'label' => $this->label,
            'name' => $this->name,
            'is_active' => $this->is_active,
            'value' => $this->value,
            'group' => $this->group,
            'is_api_accessible' => $this->is_api_accessible,
            'approve_url' => route('settings.approve', $this->id),
            'edit_url' => route('settings.edit', $this->id),
            'delete_url' => route('settings.delete', $this->id)
        ];
        return parent::toArray($request);
    }
}