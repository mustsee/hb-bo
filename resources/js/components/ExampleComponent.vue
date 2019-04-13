<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div v-for="user in users" class="card-body">
                       {{user.id}}. {{ user.name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: [],
            }
        },
        mounted() {
            console.log('Component mounted.');
            const url = 'http://www.hb.com/graphql';
            let call = axios({
                url: url,
                method: 'post',
                data: {
                    query: `query {users(count: 10) {data{id,name}}}`
                }
            }).then((res) => {
                console.log('res', res);
                this.users = res.data.data.users.data
            });
        }
    }
</script>
