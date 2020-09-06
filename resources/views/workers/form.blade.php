<div class="form-row">
    <div class="form-group col-md-4">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" value="{{ old('firstname', $worker->firstname) }}" class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}">
        @if($errors->has('firstname'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('firstname') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="middlename">Middlename</label>
        <input type="text" name="middlename" class="form-control {{ $errors->has('middlename') ? 'is-invalid' : '' }}" value="{{ old('middlename', $worker->middlename) }}">
        @if($errors->has('middlename'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('middlename') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" value="{{ old('lastname', $worker->lastname) }}">
        @if($errors->has('lastname'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('lastname') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email', $worker->email) }}">
        @if($errors->has('email'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label for="contacts">Contacts</label>
        <input type="text" name="contacts" class="form-control {{ $errors->has('contacts') ? 'is-invalid' : '' }}" value="{{ old('contacts', $worker->contacts) }}">
        @if($errors->has('contacts'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('contacts') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="id_no">ID No</label>
        <input type="text" name="id_no" class="form-control {{ $errors->has('id_no') ? 'is-invalid' : '' }}" value="{{ old('id_no', $worker->id_no) }}">
        @if($errors->has('id_no'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('id_no') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="kra_pin">KRA PIN</label>
        <input type="text" name="kra_pin" class="form-control {{ $errors->has('kra_pin') ? 'is-invalid' : '' }}" value="{{ old('kra_pin', $worker->kra_pin) }}">
        @if($errors->has('kra_pin'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('kra_pin') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="date_of_birth">date of Birth</label>
        <input type="date" name="date_of_birth" class="form-control {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" value="{{ old('date_of_birth', $worker->date_of_birth) }}">
        @if($errors->has('date_of_birth'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('date_of_birth') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="box_code">Box code</label>
        <input type="text" name="box_code" class="form-control {{ $errors->has('box_code') ? 'is-invalid' : '' }}" value="{{ old('box_code', $worker->box_code) }}">
        @if($errors->has('box_code'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('box_code') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="postal_code">Postal Code</label>
        <input type="text" name="postal_code" class="form-control {{ $errors->has('postal_code') ? 'is-invalid' : '' }}" value="{{ old('postal_code', $worker->postal_code) }}">
        @if($errors->has('postal_code'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('postal_code') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="town">Town</label>
        <input type="text" name="town" class="form-control {{ $errors->has('town') ? 'is-invalid' : '' }}" value="{{ old('town', $worker->town) }}">
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