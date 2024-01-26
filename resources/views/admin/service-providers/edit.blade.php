<x-base-layout>

                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 profile1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 profile1" style="min-height: 300px;">
                                <div class="thinborder-ontop">
                                    <h3>Service-Provider Info</h3>
                                    <x-jet-validation-errors class="mb-4" />
                                    <form id="userloginform" method="POST" action="{{route('admin.service-providers.update',$user->id)}}" enctype="multipart/form-data">   
                                        @csrf                                     
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required="" autofocus="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name"
                                                class="col-md-4 col-form-label text-md-right">Name</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="phone"
                                                class="col-md-4 col-form-label text-md-right">Phone</label>
                                            <div class="col-md-6">
                                                <input id="phone" type="number" class="form-control" name="phone" value="{{$user->phone}}" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone"
                                                class="col-md-4 col-form-label text-md-right">Service Category</label>
                                            <div class="col-md-6">
                                                <select class="form-control-file" name="complain_category_id">
                                                    @foreach($scategories as $scategory)
                                                       <option value="{{$scategory->id}}"
                                                        @if($user->SPInfo->complain_category_id==$scategory->id) selected @endif
                                                        >{{$scategory->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image" class="col-md-4 col-form-label text-md-right">Image:</label>
                                            <div class="col-sm-6">
                                                 <input type="file" class="form-control-file" name="image">
                                            </div>
                                            <img src="{{asset($user->SPInfo->image)}}" style="width:100px;height:auto" alt="">
                                         </div>
                                        <div class="form-group row">
                                            <div class="col-md-12" style="text-align: center;">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>                                
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 profile1">
                            </div>
                        </div>

</x-base-layout>