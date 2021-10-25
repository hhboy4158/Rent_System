    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">租借紀錄</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="row">
        <!--row3-->
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="card">
        
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> -->


    <div class="row">
        <!--row3-->
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-md-12">
            <div class="card border-left-info shadow h-100 py-2">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-label-group row">
                            <div class="col-md-2">
                                <label for="">
                                    <br>
                                </label>
                                <a href="#" onclick="">
                                    <input class="btn btn-primary btn-block" type="button" value="新增租借"
                                        data-toggle="modal" data-target="#NewRentModal"
                                        onclick="return TimeInsertToModal();">
                                </a>
                            </div>
                        </div>
                    </div>
                    <table id="ShowRentTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">編號</th>
                                <th scope="col">學號/職編</th>
                                <th scope="col">姓名</th>
                                <th scope="col">職稱</th>
                                <th scope="col">租借日期</th>
                                <th scope="col">歸還日期</th>
                            </tr>
                        </thead>
                        <tbody id="ShowRent">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="NewRentModal" tabindex="-1" role="dialog" aria-labelledby="NewRentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="NewRentModalLabel">新增</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="NewRentForm" onsubmit="return rent_post(); return false;">
                    <div class="modal-body">


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="FormCheckGroup">職稱</label>
                                <div id="FormCheckGroup" class="text-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="JobRadios" id="RadioStudent"
                                            value="Student" checked onchange="ChangeSelectValue('Student')">
                                        <label class="form-check-label" for="RadioStudent">
                                            學生
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="JobRadios" id="RadioTeacher"
                                            value="Teacher" onchange="ChangeSelectValue('Teacher')">
                                        <label class="form-check-label" for="RadioTeacher">
                                            教師
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputUnit">單位</label>
                                <select class="form-control" id="inputUnit">
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">姓名</label>
                                <input type="text" class="form-control" id="RentName" placeholder="ex: 楊中皇">
                            </div>
                            <div class="form-group col-md-6" id="IdLabel"></div>
                        </div>




                        <div class="form-group">
                            <label for="RentItem">租借物品</label>
                            <input type="text" class="form-control" id="RentItem" placeholder="ex: 講桌磁卡">
                        </div>
                        <div class="form-group">
                            <label for="RentDate">租借日期</label>
                            <input type="datetime-local" id="RentDate" name="date" class="form-control datepicker">
                        </div>
                        <!-- <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button> -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
ChangeSelectValue("Student");
ShowRentTable();

function TimeInsertToModal() {
    const Now = GetCurrentDateTime();
    document.getElementById("RentDate").value = Now;
    return false;
}

function GetCurrentDateTime() {
    var today = new Date();
    var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    var time = today.getHours() + ":" + today.getMinutes();
    var dateTime = date + ' ' + time;
    return dateTime;
}

function ChangeSelectValue(JobValue) {

    $.ajax({
        type: "post",
        url: "./pages/ShowRentRecord/ChangeUnit.php",
        data: {
            job: JobValue,
        },
        cache: false
    }).done(function(msg) {
        console.log(msg);
        document.getElementById("inputUnit").innerHTML = msg;
    })
    ChangeIdLabel(JobValue);
    return false;


}

function ChangeIdLabel(JobValue) {
    $.ajax({
        type: "post",
        url: "./pages/ShowRentRecord/ChangeLabel.php",
        data: {
            job: JobValue,
        },
        cache: false
    }).done(function(msg) {
        console.log(msg);
        document.getElementById("IdLabel").innerHTML = msg;
    })
    return false;
}

function get_date() {
    let i = document.getElementById("RentDate").value;
    const d = new Date(i);
    const curr_date = d.getDate();
    const curr_month = d.getMonth();
    const curr_year = d.getFullYear();
    const curr_hour = d.getHours();
    const curr_min = d.getMinutes();
    const formatdate = curr_year + "-" + (curr_month + 1) + "-" + curr_date + " " + curr_hour + ":" + curr_min;
    return formatdate;
}

function getradio() {
    const ele = document.getElementsByName("JobRadios");
    for (let i = 0; i < ele.length; i++) {
        if (ele[i].checked) {
            return ele[i].value;
            break;
        }
        break;
    }
}

function rent_post() {
    const RentName = document.getElementById("RentName").value;
    const RentJob = getradio();
    const RentId = document.getElementById("RentID").value;
    const RentDate = get_date();
    const RentItem = document.getElementById("RentItem").value;
    // console.log(
    //     "RentName: " + RentName +
    //     "RentJob: " + RentJob +
    //     "RentId: " + RentId +
    //     "RentDate: " + RentDate +
    //     "RentItem: " + RentItem
    // );

    $.ajax({
        type: "post",
        url: "./pages/ShowRentRecord/NewRent.php",
        data: {
            RentName: RentName,
            RentJob: RentJob,
            RentId: RentId,
            RentDate: RentDate,
            RentItem: RentItem,
        },
        cache: false
    }).done(function(msg) {
        if (msg == "1") {
            Swal.fire({
                icon: 'success',
                title: '新增成功',
                text: '',
                confirmButtonText: '讚喔',
            })
            location.reload();
        } else {
            Swal.fire({
                icon: 'danger',
                title: '新增失敗',
                text: msg,
                confirmButtonText: '幹三小',
            })
            location.reload();
        }

    })
    return false;
}

function ShowRentTable() {
    $.ajax({
        type: "post",
        url: "./pages/ShowRentRecord/ShowTable.php",
        data: {
            
        },
        cache: false
    }).done(function(msg) {
        document.getElementById("ShowRent").innerHTML = msg;
    })
}
    </script>