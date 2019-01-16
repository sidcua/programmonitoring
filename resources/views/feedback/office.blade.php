<div class="row justify-content-center" style="margin-top: 50px;">
    <p class="h1">Which office did you visit today?</p>
</div>
<div class="row justify-content-center" style="margin-top: 50px;">
    <div class="col-md-6">
        <p class="h1 text-center"><span class="badge badge-pill badge-info">Technical Division</span></p>
        <a onclick="office('Technical Staff/Supervisors')" class="ru" style="text-decoration: none;">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <p class="h1">Technical Staff/Supervisors</p>
                </div>
            </div>
        </a>
        <a onclick="office('MIS/Planning Division')" class="ru" style="text-decoration: none;">
        <div class="card text-white bg-info mb-3">
            <div class="card-body">
                <p class="h1">MIS/Planning Division</p>
            </div>
        </div>
        </a>
        <a onclick="office('K to 12 Unit')" class="ru" style="text-decoration: none;">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <p class="h1">K to 12 Unit</p>
                </div>
            </div>
        </a>
        <a onclick="office('UniFAST Unit')" class="ru" style="text-decoration: none;">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <p class="h1">UniFAST Unit</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6">
        <p class="h1 text-center"><span class="badge badge-pill badge-primary">Administrative Division</span></p>
        <a onclick="office('Records\' Office')" class="ru" style="text-decoration: none;">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <p class="h1">Records' Office</p>
                </div>
            </div>
        </a>
        <a onclick="office('Accounting Office')" class="ru" style="text-decoration: none;">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <p class="h1">Accounting Office</p>
                </div>
            </div>
        </a>
        <a onclick="office('Cashier\'s Office')" class="ru" style="text-decoration: none;">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <p class="h1">Cashier's Office</p>
                </div>
            </div>
        </a>
        <a onclick="office('Scholarship Unit')" class="ru" style="text-decoration: none;">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <p class="h1">Scholarship Unit</p>
                </div>
            </div>
        </a>
    </div>
</div>
<form id="select-office-form" method="POST">
    {{csrf_field()}}
    <input type="hidden" id="office" name="office" value="">
</form>