@csrf
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="premium">Premium</label>
        <input type="text" name="premium" value="{{ old('premium', $insurance->premium) }}" class="form-control {{ $errors->has('premium') ? 'is-invalid' : '' }}">
        @if($errors->has('premium'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('premium') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="amount">Amount</label>
        <input type="text" name="amount" value="{{ old('amount', $insurance->amount) }}" class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}">
        @if($errors->has('amount'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('amount') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="added_on">Start Date</label>
        <input type="date" name="added_on" class="form-control {{ $errors->has('added_on') ? 'is-invalid' : '' }}" value="{{ old('added_on', $insurance->added_on) }}">
        @if($errors->has('added_on'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('added_on') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="expires_on">Expiry Date</label>
        <input type="date" name="expires_on" class="form-control {{ $errors->has('expires_on') ? 'is-invalid' : '' }}" value="{{ old('expires_on', $insurance->expires_on) }}">
        @if($errors->has('expires_on'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('expires_on') }}</strong>
            </div>
        @endif
    </div>
</div>


<div class="d-flex form-group">
    <input type="submit" value="{{ $buttonText }}" class="btn btn-primary btn-lg ml-auto">
</div>
