<footer id="Markethub-footer" class="d-flex flex-column justify-content-start py-4">
    <div class="market-foot  ml-10">
        <div class="row w-100">
            <!-- MarketHub Logo Section -->
            <div class="col-md  justify-content-start py-3  ">
                <img src="{{ url('images/MarketHub.png') }}" alt="MarketHub Logo" class=" mb-10 markethub">
                <div class="d-flex gap-3   justify-content-start ">
                    <div class="col-4 ">
                        <img src="{{ url('images/instagram.png') }}" alt="Instagram" class="sosmed-logo">
                        <img src="{{ url('images/X.png') }}" alt="X" class="sosmed-logo">
                        <img src="{{ url('images/Youtube.png') }}" alt="YouTube" class="sosmed-logo">
                        <div class="d-inline-block foo-txt ">
                            <p class="text-white" >Follow our social media</p>
                        </div>
                    </div>
                    <div class="   d-flex justify-content-center gap-3 py-3 col">
                        <div class="col  ">
                            <a href="#" class="mx-3">Home</a>
                            <a href="benefits" class="mx-3">Review</a>
                            <a href="#" class="mx-3">About us</a>
                        </div>
                        <div class="col text-center " >
                            <a href="{{ url('register') }}" class="mx-3">SignUp</a>
                            <a href="{{ url('login') }}" class="mx-3">Login</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media Icons Section -->
            {{-- <div class="col-md-4 d-flex justify-content-center justify-content-md-end py-3">
            </div> --}}

            <!-- SignUp and Login Links Section -->
            {{-- <div class="col-md-4 d-flex align-items-center justify-content-center py-3">
            </div> --}}
        </div>

        <!-- Footer Navigation Links Section -->
    </div>
</footer>
