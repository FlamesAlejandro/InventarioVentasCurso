<template>
    <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#" data-toggle="dropdown">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">{{notifications.length}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
                <strong>Notificaciones</strong>
            </div>
            <!-- para mostrar si tienes notificaciones en el dia actual -->
            <div v-if="notifications.length">
                <li v-for="item in notifications" :key="item.id">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-envelope-o"></i> {{item.data.datos.ingresos.msj}}
                        <span class="badge badge-success">{{item.data.datos.ingresos.numero}}</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-tasks"></i> {{item.data.datos.ventas.msj}}
                        <span class="badge badge-danger">{{item.data.datos.ventas.numero}}</span>
                    </a>
                </li>
            </div>
            <div v-else>
                <span>No tiene notificaciones</span>
            </div>
            
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