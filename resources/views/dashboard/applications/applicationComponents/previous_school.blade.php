<!-- End: Student Data -->
<form class="m-form m-form--fit m-form--label-align-right">
    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10 m--hide">
            <div class="alert m-alert m-alert--default" role="alert">
                The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap
                with additional classes.
            </div>
        </div>


        <!--------------------------- Begin: Previous Schools------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    6. Previous Schools Information
                </h3>
            </div>
        </div>

        <!-- Begin: School Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                School/Nursery Name
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text"
                       value="{{$application->schoolhistory[0]->PreviousSchool}}" disabled="">
            </div>
        </div>


        <!-- Begin:  Child Curriculum -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Curriculum
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="text"
                       value="{{$application->schoolhistory[0]->acceleratedprogram}}" disabled="">
            </div>
        </div>


        <!-- Begin: Gender -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Garde
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <input class="form-control m-input" type="text"
                       value="{{$application->schoolhistory[0]->grade->Gradename}}" disabled="">
            </div>
        </div>


    </div>
</form>

