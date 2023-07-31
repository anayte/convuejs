<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component 1</div>

                    <div class="card-body">
                        I'm an example component. 
                        
                        <h1>Heading 1</h1>
                        <h2>Heading 2</h2>
                        <h3>Heading 3</h3>
                        <h4>Heading 4</h4>
                        <h5>Heading 5</h5>
                        <h6>Heading 6</h6>
                        <h3>
                          Heading
                          <small class="text-body-secondary">with faded secondary text</small>
                        </h3>
                        <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    
</template>

<script >
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
