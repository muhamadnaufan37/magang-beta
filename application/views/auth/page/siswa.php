
            <form id="siswa" style="margin-top: 100px" class="container">
                <div class="d-flex justify-content-between">
                    <a href="#" class="h1 text-dark" style="text-decoration: none;">Kembali</a>
                    <p class="h1 text-muted"><span id="page">1</span>/3</p>
                </div>
                <!-- Name input-->
                <div id="sectionOne">

                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Username" data-sb-validations="required" />
                        <label for="name">username</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="cemail" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="cemail">Confirm email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                <!-- password address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="psw" type="password" placeholder="Password" />
                        <label for="psw">Password</label>
                    </div>
                </div>
                
                <div id="sectionTwo" style="display: none;">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="sklh" type="text" placeholder="Sekolah"/>
                        <label for="sklh">Sekolah</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A School is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="jurusan" type="text" placeholder="Program studi" />
                        <label for="jurusan">Program studi</label>
                        <div class="invalid-feedback" data-sb-feedback="jurusan:required">A School is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nim" type="text" placeholder="NIM" />
                        <label for="nim">NIM</label>
                        <div class="invalid-feedback" data-sb-feedback="nim:required">A School is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="tgllhr" type="date" />
                        <label for="tgllhr">Tanggal lahir</label>
                        <div class="invalid-feedback" data-sb-feedback="tgllhr:required">A School is required.</div>
                    </div>
                </div>
                <!-- Submit Button-->
                <div class="d-grid"><a class="btn btn-primary rounded-pill btn-lg mt-5 mb-3" name="1" id="next" >Selanjutnya</a></div>
            </form>   