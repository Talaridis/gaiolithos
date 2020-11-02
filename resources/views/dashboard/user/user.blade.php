@extends("layouts.dashboard")

@section("content")
    <div class="container ">

        <form action="{{route('user.store')}}" method="POST" id="form-user-create" enctype="multipart/form-data"
              autocomplete="off">
            @csrf

        </form>

        <div class="grid grid-cols-12 gap-6 mt-5">
            <!-- BEGIN: User info -->
            <div class="intro-y col-span-12 lg:col-span-4">
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">

                    <div class="@error('first_name') has-error @enderror">
                        <label for="user-firstName">'Ονομα</label>
                        <input type="text"
                               id="user-firstName"
                               class="input w-full border mt-2"
                               name="first_name"
                               placeholder="Εισάγετε ονομα.."
                               value="{{ old('first_name') != "" ? old('first_name') : "" }}"
                               form="form-user-create"
                        >
                    </div>
                    @error("first_name")
                     <div class="pristine-error text-theme-6 mt-2">{{$message}}</div>
                    @enderror

                    <div class="mt-3 @error('last_name') has-error @enderror">
                        <label for="user-lastName">Επίθετο</label>
                        <input type="text"
                               id="user-lastName"
                               class="input w-full border mt-2"
                               name="last_name"
                               placeholder="Εισάγετε επίθετο.."
                               value="{{ old('last_name') != "" ? old('last_name') : "" }}"
                               form="form-user-create"
                        >
                    </div>
                    @error("last_name")
                    <div class="pristine-error text-theme-6 mt-2">{{$message}}</div>
                    @enderror

                    <div class="mt-3 @error('email') has-error @enderror">
                        <label for="user-email">Email</label>
                        <div class="relative mt-2">
                            <input type="text"
                                   id="user-email"
                                   class="input pr-16 w-full border col-span-4"
                                   name="email"
                                   placeholder="Εισάγετε email.."
                                   value="{{ old('email') != "" ? old('email') : "" }}"
                                   form="form-user-create"
                            >
                            <div
                                class="absolute top-0 right-0 rounded-r w-16 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">
                                @
                            </div>
                        </div>
                    </div>
                    @error("email")
                    <div class="pristine-error text-theme-6 mt-2">{{$message}}</div>
                    @enderror

                    <div class="mt-3">
                        <label for="user-phone">Τηλεφωνώ</label>
                        <input type="text"
                               id="user-phone"
                               class="input w-full border mt-2"
                               name="phone"
                               placeholder="Εισάγετε τηλεφωνώ.."
                               value="{{ old('phone') != "" ? old('phone') : "" }}"
                               form="form-user-create"
                        >
                    </div>

                    <div class="mt-3">
                        <label>Προφιλ</label>
                        <div class="mt-2">
                            <div data-simple-toolbar="true" class="editor" name="editor">
                                <p>Content of the editor.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END: Form Layout -->
            </div>
            <!-- END: User info -->

            <!-- BEGIN: role info -->
            <div class="intro-y col-span-12 lg:col-span-4">
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5">

                    <div>
                        <label for="user-role">'Role</label>
                        <select
                            id="user-role"
                            class="tail-select w-full"
                            name="role"
                            form="form-user-create"
                        >
                            <option value="1">Leonardo DiCaprio</option>
                            <option value="2">Johnny Deep</option>
                            <option value="3">Robert Downey, Jr</option>
                            <option value="4">Samuel L. Jackson</option>
                            <option value="5">Morgan Freeman</option>
                        </select>
                    </div>

                    <div>
                        <div class="mt-3 @error('password') has-error @enderror">
                            <label for="user-password">Κωδικός</label>
                            <input type="password"
                                   id="user-password"
                                   class="input w-full border mt-2"
                                   name="password"
                                   placeholder="Εισάγετε Κωδικό.."
                                   form="form-user-create"
                            >
                        </div>
                        <div class="w-full grid grid-cols-12 gap-4 h-1 mt-3">
                            <div class="col-span-3 h-full rounded bg-theme-9"></div>
                            <div class="col-span-3 h-full rounded bg-theme-9"></div>
                            <div class="col-span-3 h-full rounded bg-theme-9"></div>
                            <div class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-1"></div>
                        </div>
                        <div class="text-theme-9 mt-2">Strong password</div>
                        @error("password")
                        <div class="pristine-error text-theme-6 mt-2">{{$message}}</div>
                        @enderror

                        <div class="mt-3">
                            <label>Επανάληψη κωδικού</label>
                            <input type="password" class="input w-full border mt-2"
                                   placeholder="Εισάγετε επανάληψη κωδικού..">
                        </div>

                    </div>


                </div>
                <!-- END: Form Layout -->
            </div>
            <!-- END: role info -->

            <!-- BEGIN: media info -->
            <div class="intro-y col-span-12 lg:col-span-4">
                <!-- BEGIN: Form Layout -->
                <div class="intro-y box p-5 relative">


                    <button id="submit-user-create" class="flex justify-center btn-custom-white mb-4">
                        <i data-feather="hard-drive" class="w-4 h-4 mr-2"></i>save
                    </button>


                    <div
                        class=" flex justify-center items-center p-5 border-b border-t border-gray-500 dark:border-dark-5"
                        role="alert">
                        <label class="mr-4">Status</label>
                        <div class="mt-2">
                            <input type="checkbox"
                                   class="input input--switch border"
                                   name="status"
                                   form="form-user-create"
                            >
                        </div>
                    </div>

                    <div class="border mt-4 border-gray-200 dark:border-dark-5 rounded-md p-5">
                        <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                            <img class="rounded-md" alt="Midone Tailwind HTML Admin Template"
                                 src="images/profile-5.jpg">
                            <div
                                class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-x w-4 h-4">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </div>
                        </div>
                        <div class="w-40 mx-auto cursor-pointer relative mt-5">
                            <button type="button" class="button w-full bg-theme-1 text-white">Change Photo</button>
                            <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                        </div>
                    </div>

                </div>
                <!-- END: Form Layout -->
            </div>
            <!-- END: media info -->

        </div>


    </div>
@endsection


@section("script")

    <script src="{{mix("js/dashboard/user/user.js")}}"></script>
@endsection
