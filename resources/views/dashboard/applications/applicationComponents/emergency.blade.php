<!-- End: Student Data -->
<form class="m-form m-form--fit m-form--label-align-right">
    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10 m--hide">
            <div class="alert m-alert m-alert--default" role="alert">

            </div>
        </div>

        <!--------------------------- END: Emergency Info ------------------------>

        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    4. Emergency Info
                </h3>
            </div>
        </div>

        <!-- Begin: Person Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                First Person Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="{{$application->emergency[0]->Name}}" disabled="">
            </div>
        </div>


        <!-- Begin: Relation To Child  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Relation To Child
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="{{$application->emergency[0]->Relationtochild}}" disabled="">
            </div>
        </div>


        <!-- Begin: Person Mobile  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Mobile
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="number" value="{{$application->emergency[0]->Mobile}}" disabled="">
            </div>
        </div>


        <!-- Begin: Person Mobile  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Home NO
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="{{$application->emergency[0]->HomeTel}}" disabled="">
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

