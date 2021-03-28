@extends('base')
@section('content')
            <form action="{{ route('calculator') }}">
                <div class="row">
                    <div class="col">
                <div class="form-group col-md-12">
                    <label for="number_one"></label>
                    <input type="number" class="form-control" id="number_one" name="numberOne" placeholder="number one" min="0" step="1" required>
                </div>
                    </div>
                    <div class="col">
                <div class="form-group col-md-12">
                    <label for="number_two"></label>
                    <input type="number" class="form-control" id="number_two" name="numberTwo" placeholder="number two" min="0" step="1" required>
                </div>
                    </div>
                    <div class="col">
                        <div class="form-group col-md-12">
                            <label for="action"></label>
                            <input type="text" class="form-control" id="action" name="action" placeholder="action" required>
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary">Calculate</button>
                </div>
            </form>

            <div class="form-group col-md-3">
                <label for="result">Result:</label>
                <input class="form-control" value="{{ $result }}" id="result" disabled>
            </div>
@endsection
