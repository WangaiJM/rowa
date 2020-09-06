<div class="form-row">
    <div class="form-group col-md-4">
        <label for="registration">Registration Number</label>
        <input type="text" name="registration" class="form-control {{ $errors->has('registration') ? 'is-invalid' : '' }}" value="{{ old('registration', $motor->registration)}}">
        @if ($errors->has('registration'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('registration') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="log_book_no">Log Book</label>
        <input type="text" name="log_book_no" class="form-control {{ $errors->has('log_book_no') ? 'is-invalid' : '' }}" value="{{ old('log_book_no', $motor->log_book_no)}}">
        @if ($errors->has('log_book_no'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('log_book_no') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="chassis">Chassis</label>
        <input type="text" name="chassis" class="form-control {{ $errors->has('chassis') ? 'is-invalid' : '' }}" value="{{ old('chassis', $motor->chassis)}}">
        @if ($errors->has('chassis'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('chassis') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="make">Make</label>
        <input type="text" name="make" class="form-control {{ $errors->has('make') ? 'is-invalid' : '' }}" value="{{ old('make', $motor->make) }}">
        @if ($errors->has('make'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('make') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="model">Model</label>
        <input type="text" name="model" class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}" value="{{ old('model', $motor->model)}}">
        @if ($errors->has('model'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('model') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="type">Type</label>
        <input type="text" name="type" class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" value="{{ old('type', $motor->type)}}">
        @if ($errors->has('type'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('type') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="body">Body</label>
        <input type="text" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" value="{{ old('body', $motor->body)}}">
        @if ($errors->has('body'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('body') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="fuel">Fuel</label>
        <input type="text" name="fuel" class="form-control {{ $errors->has('fuel') ? 'is-invalid' : '' }}" value="{{ old('fuel', $motor->fuel)}}">
        @if ($errors->has('fuel'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('fuel') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="main_year">Main Year</label>
        <input type="text" name="main_year" class="form-control {{ $errors->has('main_year') ? 'is-invalid' : '' }}" value="{{ old('main_year', $motor->main_year)}}">
        @if ($errors->has('main_year'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('main_year') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="rating">Rating</label>
        <input type="text" name="rating" class="form-control {{ $errors->has('rating') ? 'is-invalid' : '' }}" value="{{ old('rating', $motor->rating)}}">
        @if ($errors->has('rating'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('rating') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="engine_no">Engine Number</label>
        <input type="text" name="engine_no" class="form-control {{ $errors->has('engine_no') ? 'is-invalid' : '' }}" value="{{ old('engine_no', $motor->engine_number) }}">
        @if ($errors->has('engine_no'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('engine_no') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="color">Color</label>
        <input type="text" name="color" class="form-control {{ $errors->has('color') ? 'is-invalid' : '' }}" value="{{ old('color', $motor->color)}}">
        @if ($errors->has('color'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('color') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="reg_date">Registration Date</label>
        <input type="text" name="reg_date" class="form-control {{ $errors->has('reg_date') ? 'is-invalid' : '' }}" value="{{ old('reg_date', $motor->reg_date)}}">
        @if ($errors->has('reg_date'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('reg_date') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="gross_weigth">Gross Weight</label>
        <input type="text" name="gross_weigth" class="form-control {{ $errors->has('gross_weight') ? 'is-invalid' : '' }}" value="{{ old('gross_weight', $motor->gross_weight) }}">
        @if ($errors->has('gross_weight'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('gross_weight') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="no_of_prev_owners">Number of Previous Owners</label>
        <input type="text" name="no_of_prev_owners" class="form-control {{ $errors->has('no_of_prev_owners') ? 'is-invalid' : '' }}" value="{{ old('no_of_prev_owners', $motor->no_of_prev_owners)}}">
        @if ($errors->has('no_of_prev_owners'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('no_of_prev_owners') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="passengers">Passengers</label>
        <input type="text" name="passengers" class="form-control {{ $errors->has('passengers') ? 'is-invalid' : '' }}" value="{{ old('passengers', $motor->passengers) }}">
        @if ($errors->has('passengers'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('passengers') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="tare_weight">tare Weight</label>
        <input type="text" name="tare_weight" class="form-control {{ $errors->has('tare_weight') ? 'is-invalid' : '' }}" value="{{ old('tare_weight', $motor->tare_weight) }}">
        @if ($errors->has('tare_weight'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('tare_weight') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="tax_class">Tax Class</label>
        <input type="text" name="tax_class" class="form-control {{ $errors->has('tax_class') ? 'is-invalid' : '' }}" value="{{ old('tax_class', $motor->tax_class) }}">
        @if ($errors->has('tax_class'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('tax_class') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="axies">Axies</label>
        <input type="text" name="axies" class="form-control {{ $errors->has('axies') ? 'is-invalid' : '' }}" value="{{ old('axies', $motor->axies)}}">
        @if ($errors->has('axies'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('axies') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="load_capacity">Load Capacity</label>
        <input type="text" name="load_capacity" class="form-control {{ $errors->has('load_capacity') ? 'is-invalid' : '' }}" value="{{ old('load_capacity', $motor->load_capacity) }}">
        @if ($errors->has('load_capacity'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('load_capacity') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="previous_reg_country">Previous Registration Country</label>
        <input type="text" name="previous_reg_country" class="form-control {{ $errors->has('previous_reg_country') ? 'is-invalid' : '' }}" value="{{ old('previous_reg_country', $motor->previous_reg_country)}}">
        @if ($errors->has('previous_reg_country'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('previous_reg_country') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="previous_registration">Previous Registration</label>
        <input type="text" name="previoous_registration" class="form-control {{ $errors->has('previous_registration') ? 'is-invalid' : '' }}" value="{{ old('previous_registration', $motor->previous_registration) }}">
        @if ($errors->has('previous_registration'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('previous_registration') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="duty">Duty</label>
        <input type="text" name="duty" class="form-control {{ $errors->has('duty') ? 'is-invalid' : '' }}" value="{{ old('duty', $motor->duty) }}">
        @if ($errors->has('duty'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('duty') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        <label for="paid">Paid</label>
        <input type="text" name="paid" class="form-control {{ $errors->has('paid') ? 'is-invalid' : '' }}" value="{{ old('paid', $motor->paid) }}">
        @if ($errors->has('paid'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('paid') }}</strong>
            </div>
        @endif
    </div>
</div>

<div class="d-flex form-group">
    <input type="submit" value="{{ $buttonText }}" class="btn btn-primary btn-lg ml-auto">
</div>