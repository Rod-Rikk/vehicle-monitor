<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">



        {{-- Create vehicle form --}}
        <form class="user" method="POST" action="/vehicles">
            {{ csrf_field() }}

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Persist data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="width:200%">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Entry</h4>
                                <p class="card-description"> Add a new vehicle</p>

                                <div class="form-group">
                                    <label for="numberPlate">Number plate</label>
                                    <input type="text" class="form-control" name="num_plate"
                                        {{ $errors->has('num_plate') ? 'alert-danger' : '' }} placeholder="Number Plate"
                                        value="{{ old('num_plate') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control"
                                        {{ $errors->has('description') ? 'alert-danger' : '' }} name="description"
                                        rows="4" value="{{ old('num_plate') }}" required>
                                                            </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="chassisNumber">Chassis Number</label>
                                    <input type="text" class="form-control" name="cha_num"
                                        {{ $errors->has('cha_num') ? 'alert-danger' : '' }} placeholder="Chassis No."
                                        value="{{ old('num_plate') }}" required>

                                </div>
                                <div class="form-group">
                                    <label for="model">Model</label>
                                    <input type="text" class="form-control" name="model"
                                        {{ $errors->has('model') ? 'alert-danger' : '' }} placeholder="Model"
                                        value="{{ old('num_plate') }}" required>

                                </div>
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="number" class="form-control" name="code"
                                        {{ $errors->has('code') ? 'alert-danger' : '' }} placeholder="Code"
                                        value="{{ old('num_plate') }}" required>

                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>

            {{-- errors block --}}
            @if ($errors->any())
            <div class="col-md-6">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            @endif
        </form>
    </div>

</div>