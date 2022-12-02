<!-- FORM -->
<form action="/terms" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="privacyContent">Privacy Content</label>
        <textarea name="privacyContent" cols="30" rows="10" class="form-control"
                  id="text-textarea">{{ old('privacyContent', $term->privacyContent) }}</textarea>
        <div>{{ $errors->first('privacyContent') }}</div>
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<!-- END FORM -->
