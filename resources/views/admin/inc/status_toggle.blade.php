<div class="form-check form-switch">
    <input class="form-check-input status btn-sm" 
    @if($item->status == 1) checked @endif 
    type="checkbox" 
    id="flexSwitchCheckChecked"
    data-toggle-url="{{ \App\Helpers\RouteHelpers::getToggleRoute($item) }}" 
    data-offstyle ="danger" 
     >
  </div>
