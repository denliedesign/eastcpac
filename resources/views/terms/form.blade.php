<!-- FORM -->
<form action="/terms" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="policyContent">Privacy Content</label>
        <textarea name="policyContent" cols="30" rows="10" class="form-control"
                  id="text-textarea"></textarea>
        <div>{{ $errors->first('policyContent') }}</div>
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
<!-- END FORM -->
