<template>
    <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#" data-toggle="dropdown">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
                <strong>Notificaciones</strong>
            </div>
            <li v-for="item in notifications" :key="item.id">
                <a class="dropdown-item" href="#">
                    <i class="fa fa-envelope-o"></i> {{JSON.parse(item.data).datos.ingresos.msj}}
                    <span class="badge badge-success">3</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-tasks"></i> {{JSON.parse(item.data).datos.ventas.msj}}
                    <span class="badge badge-danger">2</span>
                </a>
            </li>
        </div>
    </li>
</template>
<script>
    export default {
        props : [notification],
        data() {
            return {

            }
        }
    }
</script>