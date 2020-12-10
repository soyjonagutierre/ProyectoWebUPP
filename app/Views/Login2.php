<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="<?php echo base_url();?>/assets/images/user.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" method="get" onsubmit="return admin();">
                    <div class="form-group glyphicon glyphicon-cloud" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" id="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password" id="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btn" id="name" onclick="link();"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="<?php echo base_url();?>/index.php/Pastel/Registro">Registrarse</a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>/assets/js/validacion.js"></script>
</body>
</html>