<style>
    .underlay {
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        inset: 0;
    }

    .dialogbox {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 1rem;

    }

</style>

@if (session()->has('message'))
<div class="underlay">
    <div class="dialogbox rounded-3 shadow bg-white py-3 text-center fw-bold fs-4">
        {{session('message')}}
        <button class="btn btn-dark my-3">
            OK
        </button>
    </div>
</div>

@endif

<script>
    let btn = document.querySelector('.btn');
    let box = document.querySelector('.dialogbox');
    let underlay = document.querySelector('.underlay');
    btn.addeventListener('click', () => {
        box.style.display = "none";
        underlay.style.display = "none";
    })
    setTimeout(() => {
        box.style.display = "none";
        underlay.style.display = "none";
    }, 3000);

</script>
