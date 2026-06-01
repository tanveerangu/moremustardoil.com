@csrf
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
            placeholder="Title" value="{{ old('title', $product->title ?? '') }}">
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
            placeholder="Slug" value="{{ old('slug', $product->slug ?? '') }}">
        @error('slug')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label for="category_id" class="form-label">Product Category</label>
        <select class="form-select" name="category_id" id="category_id">
            <option value="">No product category selected</option>
            @foreach ($product_categories as $item)
                <option value="{{ $item->id }}"
                    @if (old('category_id') == $item->id) selected
                    @elseif (isset($product) && $product->category_id == $item->id && !old('category_id'))
                        selected @endif>
                    {{ $item->title }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label for="sku" class="form-label">SKU</label>
        <input type="text" name="sku" class="form-control @error('sku') is-invalid @enderror" id="sku"
            placeholder="Sku" value="{{ old('sku', $product->sku ?? '') }}">
        @error('sku')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-12 mb-3">
        <label for="images" class="form-label">Product Images <span class="text-danger">*</span></label>
        <input type="file" name="images[]" class="form-control @error('images') is-invalid @enderror" id="image_url"
            multiple>

        @error('images')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="mt-2" id="imagePreviewContainer"></div>
        <!-- Preview Uploaded Images -->
        <div class="mt-2 d-flex flex-wrap">
            @if (isset($product) && $product->images)
                @foreach ($product->images as $image)
                    <div class="p-2">
                        <img src="{{ asset($image->image_url) }}" class="img-thumbnail m-1" width="100"
                            style="height: 200px;
    width: 100%;
    object-fit: contain;">
                        <a class="btn btn-danger delete-confirm d-block btn-sm"
                            data-url="{{ route('admin.products.deleteImage', $image->id) }}">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="col-md-12 mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{{ old('content', $product->content ?? '') }}</textarea>
        @error('content')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

</div>
{{-- <hr>
    <div class="col-md-12 mb-3">
        <label for="meta_tags" class="form-label">Meta Tags and Head Code</label>
        <textarea name="meta_tags" id="meta_tags" class="form-control" rows="5">{{ old('meta_tags', $product->meta_tags ?? '') }}</textarea>
    </div>
</div> --}}
