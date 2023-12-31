@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card p-3">
                <div class="card-header mb-3">Privacy and Policy Details</div>
                <form action="{{ route('privacyandpolicy.update') }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="col-md-12 mb-3">
                        <label class="small mb-1" for="inputDescription">Description</label>
                        <textarea class="form-control" style="resize: none;" name="description" id="inputDescription"
                            placeholder="Add Description" rows="45" required>{{ old('description', $item->description) }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input class="form-control" name="id" value="{{ old('id', $item->id) }}" type="hidden">

                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('inputDescription');
    </script>
@endsection
