<template>
    <div class="col-md-2">
        <div class="card card-default">
            <div class="card-header">Menu</div>

            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action" href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                <a class="list-group-item list-group-item-action" href="/users"><i class="fa fa-users"></i> Users</a>
                <a class="list-group-item list-group-item-action" href="/logout"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted....')
        }
    }
</script>
