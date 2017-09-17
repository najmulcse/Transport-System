 <div class="menu_section">
                <h3>Issue</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('add.vehicle')}}"><i class="fa fa-plus"></i> Add New Vehicle </a></li>
                  <li><a href="{{route('all.vehicles')}}"><i class="fa fa-list-alt "></i> All Vehicles  </a></li> 
                  <li><a href="{{route('assign.vehicle')}}"><i class="fa fa-list-alt "></i> Vehicle Assign to Driver  </a></li> 
                  <li><a href="{{route('show.assign_vehicle')}}"><i class="fa fa-list-alt "></i> Show Assign Vehicle  </a></li>
                  <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts"> <i class="fa fa-th-large" aria-hidden="true"></i>   Route & Time <i class="fa fa-chevron-circle-down pull-right" aria-hidden="true"></i></a>
                        <ul id="posts" class="collapse">
                            <li>
                                <a href="{{route('add.route')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Add route</a>
                            </li>
                            <li>
                                <a  href="{{route('add.times')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Time</a>
                            </li>
                            <li>
                                <a  href="{{route('all.times.routes')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i> All Time & Route</a>
                            </li>
                        </ul>
                    </li>
                    
                  <li><a href="#"><i class="fa fa-globe"></i> All Issue </a></li>
                  <li><a href="#"><i class="fa fa-list-alt "></i>  Driver Profile </a></li>
                </ul>
              </div>


              <div class="menu_section">
                <h3>Request</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('add.driver')}}"><i class="fa fa-plus"></i> Add New Driver Conductor </a></li>
                  <li><a href="{{route('all.drivers')}}"><i class="fa fa-list-alt"></i> All Driver Conductor </a></li>
                  
                  <li><a href="#"><i class="fa fa-globe"></i> All Request </a></li>
                  <li><a href="#"><i class="fa fa-list-alt "></i> Driver routine </a></li>
                  <li><a href="#"><i class="fa fa-list-alt "></i> Conductor Routine </a></li>
                </ul>
              </div>

            </div>