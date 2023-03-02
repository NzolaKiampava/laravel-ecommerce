<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card-body">
        <div class="form-group">
          <label for="product_category_id">Select Product Category</label>
          <select wire:model="selectedCategory" name="product_category_id" id="product_category_id" class="form-control">
            <option selected>Select One</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
          </select>
        </div>
    </div>

    <div class="card-body">
        <div class="form-group">
          <label for="product_subcategory_id">Select Product Sub Category</label>
          <select name="product_subcategory_id" id="product_subcategory_id" class="form-control">
            <option selected>Select One</option>
            @foreach ($subcategories as $subcategory)
                <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
            @endforeach
          </select>
        </div>
    </div>

</div>
