<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav" id="sidebar-main">
                <div class="sb-sidenav-menu-heading">Business Automation</div>
                <a class="nav-link" href="{{ route("dashboard") }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutDailyProcess" aria-expanded="false" aria-controls="collapseLayoutDailyProcess">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Daily Process
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutDailyProcess" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route("price-list") }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i> Price List</a>

                        <a class="nav-link" href="{{ route("expense-record") }}"> <i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i> Expenses Record</a>
                        <a class="nav-link" href="{{ route("create-expense") }}"> <i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i> Create Expenses</a>


                        <a class="nav-link" href="{{route("expenses-head")}}"> <i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i> Expenses Head</a>

                    </nav>
                </div>
            </div>
            <div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutPurchase" aria-expanded="false" aria-controls="collapseLayoutPurchase">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Purchase
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseLayoutPurchase" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#"> <i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Purchase Order</a>
                        <a class="nav-link" href="#"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Purchase Order Create</a>
                        <a class="nav-link" href="#"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Purchase Invoice</a>
                        <a class="nav-link" href="#"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Purchase Invoice Create</a>
                        <a class="nav-link" href="#"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i> Purchase Return</a>
                        <a class="nav-link" href="#"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Purchase Return Create</a>
                    </nav>
                </div>
            </div>
            <div>
                <hr>

                <!-- inventory -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#inventory" aria-expanded="false" aria-controls="inventory">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    inventory
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="inventory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('inventory.branch.table') }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Branch</a>
                        <a class="nav-link" href="{{ route('inventory.warehouse.table') }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Warehouse</a>
                    </nav>
                </div>
            </div>
                <!-- product setup -->
                <div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#productSetup" aria-expanded="false" aria-controls="productSetup">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Product-setup
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="productSetup" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.manage.category') }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Category</a>
                        <a class="nav-link" href="{{ route('admin.manage.subCategory') }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Sub-Category</a>
                        <a class="nav-link" href="{{ route('admin.manage.product') }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Product</a>
                        <a class="nav-link" href="{{ route('admin.manage.stock') }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Stock</a>
                    </nav>
                </div>
            </div>
            <div>
                <!-- account setup -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#accountSetup" aria-expanded="false" aria-controls="accountSetup">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Account-setup
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="accountSetup" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.manage.class') }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Class</a>
                        <a class="nav-link" href="{{ route('admin.manage.group') }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Group</a>
                        <a class="nav-link" href="{{ route('admin.manage.sub-group') }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Sub-Group</a>
                        <a class="nav-link" href="{{ route('admin.manage.ledger') }}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Ledger</a>
                    </nav>
                </div>
            </div>
                <hr>
                <div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutBank" aria-expanded="false" aria-controls="collapseLayoutBank">
                    <div class="sb-nav-link-icon"><i class="fa fa-credit-card-alt"></i></div>
                        Bank
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutBank" aria-labelledby="headingNine" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('banks.index')}}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Bank List</a>
                        <a class="nav-link" href="{{route('banks.create')}}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Add Bank</a>
                        <a class="nav-link" href="{{route('bank-account.index')}}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Account List</a>
                        <a class="nav-link" href="{{route('bank-account.create')}}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Add Account</a>
                        <a class="nav-link" href="{{route('mobile-account.index')}}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Mobile Account</a>
                        <a class="nav-link" href="{{route('transanction.index')}}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>All Transaction</a>
                        <a class="nav-link" href="{{route('transanction.create')}}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Add Transaction</a>
                        <a class="nav-link" href="#"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Cheque Management</a>
                    </nav>
                </div>
            </div>
            <div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutUser" aria-expanded="false" aria-controls="collapseLayoutUser">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-user"></i></div>
                    Users & Roles
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutUser" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('roles.index')}}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Role List</a>
                        <a class="nav-link" href="{{route('roles.create')}}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Add Role</a>
                        <a class="nav-link" href="{{route('users.index')}}"><i class="fa fa-angle-right" style="margin-right: 10px;" aria-hidden="true"></i>Users</a>


                    </nav>
                </div>
            </div>
            <div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutPages" aria-expanded="false" aria-controls="collapseLayoutPages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutPages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingFive" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <a class="nav-link collapsed" onclick="event.preventDefault(); this.closest('form').submit();" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutLogOut" aria-expanded="false" aria-controls="collapseLayoutLogOut">
                    <div class="sb-nav-link-icon"><i class="fa fa-sign-out" aria-hidden="true"></i>
                      &nbsp; Log Out
                    <div class="sb-sidenav-collapse-arrow"> </div>
                </a>
            </form>
            </div>
        </div>
    </nav>
</div>
