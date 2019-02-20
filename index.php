<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .color-red {
            color: red;
        }
        .color-blue {
            color: blue;
        }
        .is-loading { background: red; }
    </style>
</head>
<body>
    <div id="container">
        
        <!-- <input type="text" name="" id="input" class="form-control" value="" v-model="message"> 
        <p>Try This: {{message}}</p> -->

        
        <!-- <input type="text" name="" id="input" class="form-control" value="" v-model="newName"> 
        <button v-on:click="addName" >Add Name</button>
        <ul>
            <li v-for="name in names" v-text="name"></li>
        </ul> -->

        
        <!-- <button v-bind:class="{ 'is-loading': isLoading }" @click="toggleClass">Toggle Me</button> -->

        <!-- <h1>
            {{ reverseMessage }}
        </h1> -->
        <h1>All Task</h1>
        <ul>
            <li v-for="task in tasks" v-text="task.description"></li>
        </ul>

        <h1>Incomplete Task</h1>
        <ul>
            <li v-for="task in incompleteTasks"  v-text="task.description"></li>
        </ul>


        
        
        
    </div>


<script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>

<script>

    var app = new Vue({
            el : '#container',
            data: {
            //    message: 'Hello World'
                tasks: [
                    { description: 'Go to the store', completed: true },
                    { description: 'Finish screencast', completed: false },
                    { description: 'Make Donation', completed: false },
                    { description: 'Clear inbox', completed: false },
                    { description: 'Make dinner', completed: false },
                    { description: 'Clear room', completed: true },
                ]
            },
            methods : {
                
            },
            computed : {
                incompleteTasks() {
                    return this.tasks.filter(task => ! task.completed);
                }

                // reverseMessage(){
                //     return this.message.split('').reverse().join('');
                // }
            }

        });




    // This is with value
    // var app = new Vue({
    //     el : '#container',
    //     data : {
    //         newName : '',
    //         // for single string only
    //         message : 'Hello World',
    //         // for arrays
    //         names : ['Joe', 'Mary', 'Jane', 'Jack']
    //     },
    //     // just like functions are in it
    //     methods : {
    //         addName(){
    //             this.names.push(this.newName);
    //             this.newName = '';
    //         }

    //     },
    //     // Mounted is just list document.ready
    //     mounted(){
    //         // alert('asdsad');
    //     }
    // });

    // For class v-bind
    // var app = new Vue({
    //         el : '#container',
    //         data: {
    //             className: 'color-red',
    //             title: 'Now the title is being set through Javascript',
    //             isLoading: false,
    //         },
    //         methods : {
    //             toggleClass() {
    //                 this.isLoading = true;
    //             }
    //         }

    //     });
</script>

</body>
</html>
