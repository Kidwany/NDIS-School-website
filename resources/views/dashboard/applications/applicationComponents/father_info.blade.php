<!-- End: Student Data -->
<form class="m-form m-form--fit m-form--label-align-right">
    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10 m--hide">
            <div class="alert m-alert m-alert--default" role="alert">

            </div>
        </div>

        <!--------------------------- END: Father Info ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    2. Father Info
                </h3>
            </div>
        </div>

        <!-- Begin: Fathe Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Father Full Name

            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="{{$application->parentapp[0]->FullName}}" disabled="">
            </div>
        </div>


        <!-- Begin: Nationality -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Father Nationality
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <input class="form-control m-input" type="text" value="{{$application->parentapp[0]->nationality->Nationalityname}}" disabled="">
            </div>
        </div>


        <!-- Begin: Father Email -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Email
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="email" value="{{$application->parentapp[0]->email}}" disabled="">
            </div>
        </div>

        <!-- Begin: Father Phone -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Phone
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="number" disabled="" value="{{$application->parentapp[0]->Phone}}">
            </div>
        </div>

        <!-- Begin: Company -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Company Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="{{$application->parentapp[0]->Company}}" disabled>
            </div>
        </div>



        <!-- Begin: Job -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Fathe's Job
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <input class="form-control m-input" type="text" value="{{$application->parentapp[0]->jobs->Occupationname}}" disabled>
            </div>
        </div>


        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-7">
                        <button type="reset" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                            Save changes
                        </button>
                        &nbsp;&nbsp;
                        <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</form>

