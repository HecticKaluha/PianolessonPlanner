var privacyPolicy = document.getElementById('privacy-policy');
privacyPolicy.addEventListener('click', function() {
        Swal.fire({
            icon: 'info',
            title: "Privacy Policy",
            html:   `<p class="text-left">This application processes your data so we can provide a service to you. By using this application to plan a lesson you consent with the processing of your data.</p>
                    <p class="text-left mt-5">Below you can find out what data we collect and store when you plan a lesson.</p>
                    <ul class="text-left list-disc pl-10 my-5">
                        <li>Email</li>
                        <li>Full name</li>
                    </ul>
                    <p class="text-left mb-5">We only use this data for administrative purposes, and to be able to provide you with the service that is 'Lessons in piano'. </p>
                    <p class="text-sm text-left"><b>The data is <u>not shared with or sold to 3rd parties</u></b></p>
                    `,
            position: 'bottom-right'
        });
});
