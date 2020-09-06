<div class="form-row">
    <div class="form-group col-md-4">
        <label for="plot_name">Plot Name</label>
        <input type="text" name="plot_name" class="form-control {{ $errors->has('plot_name') ? 'is-invalid' : '' }}" value="{{ old('plot_name', $plot->plot_name)}}">
        @if ($errors->has('plot_name'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('plot_name') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="plot_no">Plot Number</label>
        <input type="text" name="plot_no" class="form-control {{ $errors->has('plot_no') ? 'is-invalid' : '' }}" value="{{ old('plot_no', $plot->plot_no)}}">
        @if ($errors->has('plot_no'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('plot_no') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="location">Location</label>
        <input type="text" name="location" class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" value="{{ old('location', $plot->location)}}">
        @if ($errors->has('location'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('location') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="size">Size</label>
        <input type="text" name="size" class="form-control {{ $errors->has('size') ? 'is-invalid' : '' }}" value="{{ old('size', $plot->size) }}">
        @if ($errors->has('size'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('size') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="Value">Value</label>
        <input type="text" name="value" class="form-control {{ $errors->has('value') ? 'is-invalid' : '' }}" value="{{ old('value', $plot->value)}}">
        @if ($errors->has('value'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('value') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
       
    </div>
</div>


<div class="d-flex form-group">
    <input type="submit" value="{{ $buttonText }}" class="btn btn-primary btn-lg ml-auto">
</div>