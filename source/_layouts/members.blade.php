@extends('_layouts.main')

@section('body')
    

    <div id="members">
        @yield('content')
    </div>

    <script>
        async function getGitHubAvatar() {

            let usernameImg = document.querySelectorAll("#members img")[0];
            let usernameGithub = usernameImg.getAttribute("alt");
 

            let result = await fetch(`https://api.github.com/users/${usernameGithub}`);
            let data = await result.json();
            usernameImg.setAttribute("src", data["avatar_url"]);
        }


        document.addEventListener("onload", getGitHubAvatar());
    </script>

 

@endsection
