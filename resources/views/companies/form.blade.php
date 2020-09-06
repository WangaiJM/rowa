@csrf
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $company->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">
        @if($errors->has('name'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label for="industry">Industry</label>
        <input type="text" name="industry" class="form-control {{ $errors->has('industry') ? 'is-invalid' : '' }}" value="{{ old('industry', $company->industry) }}">
        @if($errors->has('industry'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('industry') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="contacts">Contacts</label>
        <input type="text" name="contacts" class="form-control {{ $errors->has('contacts') ? 'is-invalid' : '' }}" value="{{ old('contacts', $company->contacts) }}">
        @if($errors->has('contacts'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('contacts') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email', $company->email) }}">
        @if($errors->has('email'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="kra_pin">KRA PIN</label>
        <input type="text" name="kra_pin" class="form-control {{ $errors->has('kra_pin') ? 'is-invalid' : '' }}" value="{{ old('kra_pin', $company->kra_pin) }}">
        @if($errors->has('kra_pin'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('kra_pin') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="box_code">Box code</label>
        <input type="text" name="box_code" class="form-control {{ $errors->has('box_code') ? 'is-invalid' : '' }}" value="{{ old('box_code', $company->box_code) }}">
        @if($errors->has('box_code'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('box_code') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="postal_code">Postal Code</label>
        <input type="text" name="postal_code" class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" value="{{ old('postal_code', $company->postal_code) }}">
        @if($errors->has('postal_code'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('postal_code') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="town">Town</label>
        <input type="text" name="town" class="form-control {{ $errors->has('town') ? 'is-invalid' : '' }}" value="{{ old('town', $company->town) }}">
        @if($errors->has('town'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('town') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="d-flex form-group">
    <input type="submit" value="{{ $buttonText }}" class="btn btn-primary btn-lg ml-auto">
</div>