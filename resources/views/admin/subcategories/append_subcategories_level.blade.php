{{-- <div class="form-group">
    <label for="projectinput1"> niveau de la catègorie</label>
    <select name="parent_id" class="select2 form-control">
         <option value="0">categorie principal</option>
            @if (!empty($subcategories))
            @foreach ($subcategories as $cat)
            <option value="{{$cat['id']}}">{{$cat['name']}}</option>
            @if (!empty($cat['subcategories']))
            @foreach ($cat['subcategories'] as $subcat)
            <option value="{{$subcat['id']}}">&nbsp;&raquo;&nbsp;{{$subcat['name']}}</option>
            @endforeach
            @endif
            @endforeach
            @endif

    </select>
</div> --}}
