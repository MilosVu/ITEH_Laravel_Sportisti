<x-layout>
    <x-slot name='title'>
        Sportista
    </x-slot>

    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>ImDezCode</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>imdezcode@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>Bali, Indonesia</td>
                        </tr>
                        <tr>
                            <td>Hobbies</td>
                            <td>:</td>
                            <td>Diving, Reading Book</td>
                        </tr>
                        <tr>
                            <td>Job</td>
                            <td>:</td>
                            <td>Web Developer</td>
                        </tr>
                        <tr>
                            <td>Skill</td>
                            <td>:</td>
                            <td>PHP, HTML, CSS, Java</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</x-layout>

<style>
    .main {
        margin-top: 2%;
        margin-left: 29%;
        font-size: 28px;
        padding: 0 10px;
        width: 58%;
    }

    .main h2 {
        color: #333;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .main .card {
        background-color: #fff;
        border-radius: 18px;
        box-shadow: 1px 1px 8px 0 grey;
        height: auto;
        margin-bottom: 20px;
        padding: 20px 0 20px 50px;
    }

    .main .card table {
        border: none;
        font-size: 16px;
        height: 270px;
        width: 80%;
    }

    .edit {
        position: absolute;
        color: #e7e7e8;
        right: 14%;
    }

    /* End */
</style>