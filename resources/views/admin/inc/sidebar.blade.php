<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
<<<<<<< HEAD
=======
            @can('dashboard')
>>>>>>> 9066209 (Hello)
            <li><a href="{{url('home')}}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
<<<<<<< HEAD

=======
            @endcan

            @can('create-bank_account')
>>>>>>> 9066209 (Hello)
            <li>
                <a href="{{route('bank_account.index')}}">
                    <i class="fas fa-university"></i>
                    <span class="nav-text">Bank Account</span>
                </a>
            </li>
<<<<<<< HEAD

=======
            @endcan

            @can('create-department')
>>>>>>> 9066209 (Hello)
            <li>
                <a href="{{route('department.create')}}">
                    <i class="fas fa-hotel"></i>
                    <span class="nav-text">Department</span>
                </a>
            </li>
<<<<<<< HEAD

=======
            @endcan

            @canany(['list-item', 'create-item', 'create-brand', 'create-unit', 'item-stock'])
>>>>>>> 9066209 (Hello)
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-box"></i>
                    <span class="nav-text">Items</span>
                </a>
                <ul aria-expanded="false">
<<<<<<< HEAD
                    <li><a href="{{route('item.create')}}">Item Create</a></li>
                    <li><a href="{{route('item.index')}}">Item List</a></li>
                    <li><a href="{{route('brand.create')}}">Brand Create</a></li>
                    <li><a href="{{route('unit.create')}}">Unit Create</a></li>
                    <li><a href="{{route('item.stock')}}">Stock</a></li>
                </ul>
            </li>
        
=======
                    @can('list-item')
                    <li><a href="{{route('item.create')}}">Item Create</a></li>
                    @endcan
                    
                    @can('list-item')
                    <li><a href="{{route('item.index')}}">Item List</a></li>
                    @endcan

                    @can('create-brand')
                    <li><a href="{{route('brand.create')}}">Brand Create</a></li>
                    @endcan

                    @can('create-unit')
                    <li><a href="{{route('unit.create')}}">Unit Create</a></li>
                    @endcan

                    @can('item-stock')
                    <li><a href="{{route('item.stock')}}">Stock</a></li>
                    @endcan
                </ul>
            </li>
            @endcanany

            @canany(['list-party_purchase', 'create-party_purchase', 'party_purchase_report', 'list-petty_purchase', 'create-petty_purchase','petty_purchase_report'])
>>>>>>> 9066209 (Hello)
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i>                    
                    <span class="nav-text">Purchase</span>
                </a>
<<<<<<< HEAD
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Party Purchase</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('party-purchase.create') }}">Party Purchase Create</a></li>
                            <li><a href="{{ route('party-purchase.index') }}">Party Purchase List</a></li>
                            <li><a href="{{ route('party-purchase.report') }}">Party Purchase Report</a></li>
                        </ul>
                    </li>
                </ul>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Petty Purchase</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('petty-purchase.create') }}">Petty Purchase Create</a></li>
                            <li><a href="{{ route('petty-purchase.index') }}">Petty Purchase List</a></li>
                            <li><a href="{{ route('petty-purchase.report') }}">Petty Purchase Report</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

=======
                @canany(['list-party_purchase', 'create-party_purchase', 'party_purchase_report'])
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Party Purchase</a>
                        <ul aria-expanded="false">
                            @can('create-party_purchase')
                            <li><a href="{{ route('party-purchase.create') }}">Party Purchase Create</a></li>
                            @endcan

                            @can('list-party_purchase')
                            <li><a href="{{ route('party-purchase.index') }}">Party Purchase List</a></li>
                            @endcan

                            @can('party_purchase_report')
                            <li><a href="{{ route('party-purchase.report') }}">Party Purchase Report</a></li>
                            @endcan
                        </ul>
                    </li>
                </ul>
                @endcanany

                @canany(['list-petty_purchase', 'create-petty_purchase','party_purchase_report'])
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Petty Purchase</a>
                        <ul aria-expanded="false">
                            @can('create-petty_purchase')
                            <li><a href="{{ route('petty-purchase.create') }}">Petty Purchase Create</a></li>
                            @endcan

                            @can('list-petty_purchase')
                            <li><a href="{{ route('petty-purchase.index') }}">Petty Purchase List</a></li>
                            @endcan

                            @can('petty_purchase_report')
                            <li><a href="{{ route('petty-purchase.report') }}">Petty Purchase Report</a></li>
                            @endcan
                        </ul>
                    </li>
                </ul>
                @endcanany
            </li>
            @endcanany

            @canany(['list-party_sale', 'create-party_sale', 'party_sale_report', 'list-cash_sale', 'create-cash_sale','cash_sale_report', 'list-wastage_sale', 'create-wastage_sale','wastage_sale_report'])
>>>>>>> 9066209 (Hello)
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span class="nav-text">Sales</span>
                </a>
<<<<<<< HEAD
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Party Sale</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('party-sale.create')}}">Add Party Sale</a></li>
                            <li><a href="{{ route('party-sale.index') }}">Party Sales List</a></li>
                            <li><a href="{{ route('party-sale.report') }}">Party Sales Report</a></li>
                        </ul>
                    </li>
                </ul>

                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Cash Sale</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('cash-sale.create')}}">Add Cash Sale</a></li>
                            <li><a href="{{ route('cash-sale.index') }}">Cash Sales List</a></li>
                            <li><a href="{{ route('cash-sale.report') }}">Cash Sales Report</a></li>
                        </ul>
                    </li>
                </ul>

                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Wastage Sale</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('wastage-sale.create')}}">Add Wastage Sale</a></li>
                            <li><a href="{{ route('wastage-sale.index') }}">Wastage Sales List</a></li>
                            <li><a href="{{ route('wastage-sale.report') }}">Wastage Sales Report</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

=======
                @canany(['list-party_sale', 'create-party_sale', 'party_sale_report'])
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Party Sale</a>
                        <ul aria-expanded="false">
                            @can('create-party_sale')
                            <li><a href="{{route('party-sale.create')}}">Add Party Sale</a></li>
                            @endcan

                            @can('list-party_sale')
                            <li><a href="{{ route('party-sale.index') }}">Party Sales List</a></li>
                            @endcan

                            @can('party_sale_report')
                            <li><a href="{{ route('party-sale.report') }}">Party Sales Report</a></li>
                            @endcan
                        </ul>
                    </li>
                </ul>
                @endcanany

                @canany(['list-cash_sale', 'create-cash_sale','cash_sale_report'])
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Cash Sale</a>
                        <ul aria-expanded="false">
                            @can('create-cash_sale')
                            <li><a href="{{route('cash-sale.create')}}">Add Cash Sale</a></li>
                            @endcan

                            @can('list-cash_sale')
                            <li><a href="{{ route('cash-sale.index') }}">Cash Sales List</a></li>
                            @endcan

                            @can('cash_sale_report')
                            <li><a href="{{ route('cash-sale.report') }}">Cash Sales Report</a></li>
                            @endcan

                        </ul>
                    </li>
                </ul>
                @endcanany

                @canany(['list-wastage_sale', 'create-wastage_sale','wastage_sale_report'])
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Wastage Sale</a>
                        <ul aria-expanded="false">
                            @can('create-wastage_sale')
                            <li><a href="{{route('wastage-sale.create')}}">Add Wastage Sale</a></li>
                            @endcan

                            @can('list-wastage_sale')
                            <li><a href="{{ route('wastage-sale.index') }}">Wastage Sales List</a></li>
                            @endcan

                            @can('wastage_sale_report')
                            <li><a href="{{ route('wastage-sale.report') }}">Wastage Sales Report</a></li>
                            @endcan

                        </ul>
                    </li>
                </ul>
                @endcanany
            </li>
            @endcanany

            @canany(['list-receive_challan', 'receive_challan_report', 'list-delivery_challan', 'delivery_challan_report', 'list-moving_challan','create-moving_challan', 'moving_challan_report'])
>>>>>>> 9066209 (Hello)
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-truck"></i>
                    <span class="nav-text">Challan</span>
                </a>
<<<<<<< HEAD
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Receive Challan</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('receive-challan.index') }}">Receive Challan List</a></li>
                            <li><a href="{{ route('receive-challan.report') }}">Receive Challan Report</a></li>
                        </ul>
                    </li>
                </ul>
                
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Delivery Challan</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('delivery-challan.index') }}">Delivery Challan List</a></li>
                            <li><a href="{{ route('delivery-challan.report') }}">Delivery Challan Report</a></li>
                        </ul>
                    </li>
                </ul>

                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Moving Challan</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('moving-challan.create')}}">Add Moving Challan</a></li>
                            <li><a href="{{ route('moving-challan.index') }}">Moving Challan List</a></li>
                            <li><a href="{{ route('moving-challan.report') }}">Moving Challan Report</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

=======

                @canany(['list-receive_challan', 'receive_challan_report'])
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Receive Challan</a>
                        <ul aria-expanded="false">
                            @can('list-receive_challan')
                            <li><a href="{{ route('receive-challan.index') }}">Receive Challan List</a></li>
                            @endcan

                            @can('receive_challan_report')
                            <li><a href="{{ route('receive-challan.report') }}">Receive Challan Report</a></li>
                            @endcan
                        </ul>
                    </li>
                </ul>
                @endcanany

                @canany(['list-delivery_challan', 'delivery_challan_report'])
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Delivery Challan</a>
                        <ul aria-expanded="false">
                            @can('list-receive_challan')
                            <li><a href="{{ route('delivery-challan.index') }}">Delivery Challan List</a></li>
                            @endcan

                            @can('delivery_challan_report')
                            <li><a href="{{ route('delivery-challan.report') }}">Delivery Challan Report</a></li>
                            @endcan
                        </ul>
                    </li>
                </ul>
                @endcanany

                @canany(['list-moving_challan', 'create-moving_challan', 'moving_challan_report'])
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Moving Challan</a>
                        <ul aria-expanded="false">
                            @can('create-moving_challan')
                            <li><a href="{{route('moving-challan.create')}}">Add Moving Challan</a></li>
                            @endcan

                            @can('list-moving_challan')
                            <li><a href="{{ route('moving-challan.index') }}">Moving Challan List</a></li>
                            @endcan

                            @can('moving_challan_report')
                            <li><a href="{{ route('moving-challan.report') }}">Moving Challan Report</a></li>
                            @endcan
                        </ul>
                    </li>
                </ul>
                @endcanany

            </li>
            @endcanany

            @can('list-payment')
>>>>>>> 9066209 (Hello)
            <li>
                <a href="{{route('payment.index')}}">
                    <i class="fa-regular fa-money-bill-1"></i>
                    <span class="nav-text">Payments List</span>
                </a>
            </li>
<<<<<<< HEAD

=======
            @endcan

            @canany(['list-employee', 'create-employee'])
>>>>>>> 9066209 (Hello)
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                   <i class="fas fa-users-cog"></i>
                    <span class="nav-text">Employee</span>
                </a>
                <ul aria-expanded="false">
<<<<<<< HEAD
                    <li><a href="{{route('employee.index')}}">Employee List</a></li>
                    <li><a href="{{route('employee.create')}}">Employee Create</a></li>
                </ul>
            </li>

=======
                    @can('list-employee')
                    <li><a href="{{route('employee.index')}}">Employee List</a></li>
                    @endcan

                    @can('create-employee')
                    <li><a href="{{route('employee.create')}}">Employee Create</a></li>
                    @endcan
                </ul>
            </li>
            @endcanany

            @canany(['top_sale_item_report', 'top_purchase_item_report'])
>>>>>>> 9066209 (Hello)
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-book"></i>
                    <span class="nav-text">Reports</span>
                </a>
                <ul aria-expanded="false">
<<<<<<< HEAD
                    <li><a href="{{route('top-sale-item.report')}}">Top Sale Item</a></li>
                    <li><a href="{{route('top-purchase-item.report')}}">Top Purchase Item</a></li>
=======
                    @can('top_sale_item_report')
                    <li><a href="{{route('top-sale-item.report')}}">Top Sale Item</a></li>
                    @endcan

                    @can('top_purchase_item_report')
                    <li><a href="{{route('top-purchase-item.report')}}">Top Purchase Item</a></li>
                    @endcan
>>>>>>> 9066209 (Hello)
                    <li><a href="{{route('top-sale-party.report')}}">Top Sale Party</a></li>
                    <li><a href="{{route('top-purchase-party.report')}}">Top Purchase Party</a></li>
                </ul>
            </li>
<<<<<<< HEAD

=======
            @endcanany
            @canany(['list-party', 'create-party'])
>>>>>>> 9066209 (Hello)
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-user-friends"></i>
                    <span class="nav-text">Party</span>
                </a>
                <ul aria-expanded="false">
<<<<<<< HEAD
                    <li><a href="{{route('party.create')}}">Party Create</a></li>
                    <li><a href="{{route('party.index')}}">Party List</a></li>
                </ul>
            </li>

=======
                    @can('create-party')
                    <li><a href="{{route('party.create')}}">Party Create</a></li>
                    @endcan

                    @can('list-party')
                    <li><a href="{{route('party.index')}}">Party List</a></li>
                    @endcan
                </ul>
            </li>
            @endcanany
            <li>
                 <a href="#">
                    <span class="nav-text">------ Setting & Customize ------</span>
                </a>
            </li>
            
            @canany(['list-role', 'create-role'])
>>>>>>> 9066209 (Hello)
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-user-tag"></i>
                    <span class="nav-text">Roles</span>
                </a>
                <ul aria-expanded="false">
<<<<<<< HEAD
                    <li><a href="{{route('roles.index')}}">Roles List</a></li>
                    <li><a href="{{route('roles.create')}}">Roles Create</a></li>
                    <li><a href="{{route('permission.create')}}">Permission Create</a></li>
                </ul>
            </li>
=======
                    @can('create-role')
                    <li><a href="{{route('roles.create')}}">Roles Create</a></li>
                    @endcan

                    @can('create-role')
                    <li><a href="{{route('roles.index')}}">Roles List</a></li>
                    @endcan
                    
                </ul>
            </li>
            @endcanany

            @canany(['list-user', 'create-user'])
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">Users</span>
                </a>
                <ul aria-expanded="false">
                    @can('list-user')
                    <li><a href="{{route('user.create')}}">User Create</a></li>
                    @endcan

                    @can('create-user')
                    <li><a href="{{route('user.index')}}">User List</a></li>
                    @endcan
                    
                </ul>
            </li>
            @endcanany
>>>>>>> 9066209 (Hello)

        </ul>

        <div class="copyright">
<<<<<<< HEAD
            <p><strong>softghor Limited</strong> © {{ date('Y') }} All Rights Reserved</p>
=======
            <p><strong>Softghor Limited</strong> © {{ date('Y') }} All Rights Reserved</p>
>>>>>>> 9066209 (Hello)
            {{-- <p>Made with <span class="heart"></span> by zendbot</p> --}}
        </div>
    </div>
</div>
