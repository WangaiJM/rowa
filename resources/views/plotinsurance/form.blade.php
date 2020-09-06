<div class="form-row">
    <div class="form-group col-md-4">
        <label for="fire">Fire and Buglary</label>
        <input type="text" name="fire" class="form-control {{ $errors->has('fire') ? 'is-invalid' : '' }}" value="{{ old('fire', $plotinsurance->fire)}}">
        @if ($errors->has('fire'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('fire') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="floods">Floods</label>
        <input type="text" name="floods" class="form-control {{ $errors->has('floods') ? 'is-invalid' : '' }}" value="{{ old('floods', $plotinsurance->floods)}}">
        @if ($errors->has('floods'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('floods') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="terrorism">Terrorism</label>
        <input type="text" name="terrorism" class="form-control {{ $errors->has('terrorism') ? 'is-invalid' : '' }}" value="{{ old('terrorism', $plotinsurance->terrorism)}}">
        @if ($errors->has('terrorism'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('terrorism') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-row">

    <div class="form-group col-md-6">
        <label for="premium">Premium</label>
        <input type="text" name="premium" class="form-control {{ $errors->has('premium') ? 'is-invalid' : '' }}" value="{{ old('premium', $plotinsurance->premium)}}">
        @if ($errors->has('premium'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('premium') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label for="added_on">Start Date</label>
        <input type="date" name="added_on" class="form-control {{ $errors->has('added_on') ? 'is-invalid' : '' }}" value="{{ old('added_on', $plotinsurance->added_on)}}">
        @if ($errors->has('added_on'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('added_on') }}</strong>
            </div>
        @endif
    </div>
</div>



<div class="d-flex form-group">
    <input type="submit" value="{{ $buttonText }}" class="btn btn-primary btn-lg ml-auto">
</div>