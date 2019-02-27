<!-- End: Student Data -->

<form class="m-form m-form--fit m-form--label-align-right" action="{{route('applications.store')}}" method="post" accept-charset="UTF-8">
    @csrf
    <div class="m-portlet__body">
        <div class="form-group m-form__group m--margin-top-10 m--hide">
            <div class="alert m-alert m-alert--default" role="alert">

            </div>
        </div>

        <!--------------------------- END: Diagnostic Test ------------------------>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    1. Diagnostic Test
                </h3>
            </div>
        </div>

        <!-- Begin: Student Name -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label" >
                Diagnostic Test Appointment
            </label>
            <div class="col-7">
                <div class='input-group'>

                    <input type='date'  class="form-control m-input" name="diagnostictestdate" value="{{$application->appmoredetails == "" ? "" : date('Y-m-d', strtotime($application->appmoredetails->diagnostictestdate))}}" placeholder="Select date" id='' />
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-calendar-check-o"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin: Grade -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Diagnostic Test Result
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_7"  name="diagnostictestresult" {{$application->appmoredetails == "" ? "disabled" : $application->appmoredetails->diagnostictestdate == "" ? "disabled":""}} >
                    <option selected value="" >Select Diagnostic Test Result</option>
                    <option value="Passed" {{$application->appmoredetails == "" ? "" : $application->appmoredetails->diagnostictestresult == "Passed" ? "selected":""}}>
                        Passed
                    </option>
                    <option value="Failed" {{$application->appmoredetails == "" ? "" : $application->appmoredetails->diagnostictestresult == "Failed" ? "selected":""}}>
                        Failed
                    </option>
                    <option value="Waiting List" {{$application->appmoredetails == "" ? "" : $application->appmoredetails->diagnostictestresult == "Waiting List" ? "selected":""}}>
                        Waiting List
                    </option>
                </select>
            </div>
        </div>


        <!--------------------------- END: Diagnostic Test Appointment ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    2. Parents Meeting
                </h3>
            </div>
        </div>

        <!-- Begin: Father Name  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Parents Meeting Appointment
            </label>
            <div class="col-7">
                <input class="form-control m-input" type="date" name="parentmeeting" value=" {{$application->appmoredetails == "" ? "" : date('Y-m-d', strtotime($application->appmoredetails->parentmeeting))}}" {{$application->appmoredetails == "" ? "disabled" : $application->appmoredetails->diagnostictestresult == "" ? "disabled":""}}>
            </div>
        </div>







        <!--------------------------- END: Assessment ------------------------>
        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
        <div class="form-group m-form__group row">
            <div class="col-10 ml-auto">
                <h3 class="m-form__section">
                    3. Assessment
                </h3>
            </div>
        </div>

        <!-- Begin: Assessment Appointment  -->
        <div class="form-group m-form__group row">
            <label for="example-text-input" class="col-2 col-form-label">
                Assessment Appointment
            </label>
            <div class="col-7">
                <div class='input-group'>
                    <input type='date' class="form-control m-input" name="assessmentdate"value=" {{$application->appmoredetails == "" ? "" : date('Y-m-d', strtotime($application->appmoredetails->assessmentdate))}}" placeholder="Select date" id='' {{$application->appmoredetails == "" ? "disabled" : $application->appmoredetails->parentmeeting == "" ? "disabled":""}}/>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-calendar-check-o"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Begin: Nationality -->
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-2 col-sm-12">
                Assessment Result
            </label>
            <div class="col-lg-7 col-md-9 col-sm-12">
                <select class="form-control m-select2" id="m_select2_8"  name="assessmentresult"  {{$application->appmoredetails == "" ? "" : $application->appmoredetails->parentmeeting == "" ? "disabled":""}}>
                    <option selected value="" >Select Diagnostic Test Result</option>
                    <option value="Passed" {{$application->appmoredetails == "" ? "" : $application->appmoredetails->diagnostictestresult == "Passed" ? "selected":""}}>
                        Passed
                    </option>
                    <option value="Failed" {{$application->appmoredetails == "" ? "" : $application->appmoredetails->diagnostictestresult == "Failed" ? "selected":""}}>
                        Failed
                    </option>
                    <option value="Waiting List" {{$application->appmoredetails == "" ? "" : $application->appmoredetails->diagnostictestresult == "Waiting List" ? "selected":""}}>
                        Waiting List
                    </option>
                </select>
            </div>
        </div>






{{--this is up--}}
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-7">
                        <input type="hidden" value="{{$application->appmoredetails == "" ? "" : $application->APPID}}" name="APPID" />
                        <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">
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
