<!-- End: Student Data -->
<form class="m-form m-form--fit m-form--label-align-right">
    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10 m--hide">
            <div class="alert m-alert m-alert--default" role="alert">

            </div>
        </div>


        <!--------------------------- Begin: Other Children Info ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    5. Other Children Info
                </h3>
            </div>
        </div>

        <!-- Begin: Child Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Child Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="{{$application->familychild[0]->familychildname}}" disabled="">
            </div>
        </div>


        <!-- Begin:  Child Age -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Child Age
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="{{$application->familychild[0]->familychildage}}" disabled="">
            </div>
        </div>


        <!-- Begin: Person Mobile  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                School/University Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text" value="{{$application->familychild[0]->familychildschool}}" disabled="">
            </div>
        </div>



        <!-- Begin: Gender -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Gender
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <input class="form-control m-input" type="text" value="{{$application->familychild[0]->gender->Gendername}}" disabled="">
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

