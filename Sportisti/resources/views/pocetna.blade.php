<style>

    button {
        margin: 20px;
        padding: 40px 80px;
        border: none;
        cursor: pointer;
    }

    /* PIERWSZY SPOSOB WYKORZYSTANIE CIENIA */
    .first {
        background: #19c3d6;
        box-shadow: inset 0px 0px 0px 0px #ff0099;
        transition: all 0.5s ease-in-out;
    }

    .first:hover {
        box-shadow: inset 0px -200px 0px 0px #ff0099;
    }

    .container{
        /* background-image: url('https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'); */
    }

</style>
<x-layout>
<div clas="container">
<button class="first">First way</button>
<button class="first">Second way</button>
</div>
</x-layout>