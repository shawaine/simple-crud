<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Simple CRUD</title>
  </head>

  <body>
    <form class="index" action="login.php" method="POST">
      <div class="type">Please Login</div>
      <div class="fields">
        <div class="username">
          <div class="icon">
            <img
              src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNTAiIGhlaWdodD0iNTAiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDE3MnYtMTcyaDE3MnYxNzJ6IiBmaWxsPSJub25lIj48L3BhdGg+PGcgZmlsbD0iIzMzMzMzMyI+PGcgaWQ9InN1cmZhY2UxIj48cGF0aCBkPSJNODkuMDEsMTEuNzE3NWMtMTIuNjU4MTIsMC4yMjg0NCAtMjEuOTAzMTIsNC4wMDQzOCAtMjcuNTIsMTEuMzk1Yy02LjY1MTU2LDguNzYxMjUgLTcuODYwOTQsMjIuMTA0NjkgLTMuNjU1LDM5LjU2Yy0xLjU0NTMxLDEuODk0NjkgLTIuNzE0MzcsNC43NzAzMSAtMi4yNTc1LDguNmMwLjkwMDMxLDcuNTUxODggMy45MjM3NSwxMC42ODI4MSA2LjM0MjUsMTEuOTMyNWMxLjE2OTA2LDUuOTY2MjUgNC40NjEyNSwxMi42NDQ2OSA3LjYzMjUsMTUuODAyNXYxLjYxMjVjMC4wMTM0NCwyLjI3MDk0IC0wLjAyNjg3LDQuNDIwOTQgLTAuMTA3NSw2LjY2NWMxLjgwMDYzLDMuNzYyNSA3LjUxMTU2LDkuNjc1IDE5Ljk5NSw5LjY3NWMxMi41Nzc1LDAgMTguNDM2MjUsLTYuMDMzNDQgMjAuMTAyNSwtMTAuMjEyNWMtMC4wNjcxOSwtMi4wNjkzNyAtMC4wMTM0NCwtNC4wMzEyNSAwLC02LjEyNzV2LTEuNjEyNWMzLjA3NzE5LC0zLjE0NDM3IDYuMjQ4NDQsLTkuODM2MjUgNy40MTc1LC0xNS44MDI1YzIuNDg1OTQsLTEuMjM2MjUgNS40Mjg3NSwtNC4zNTM3NSA2LjM0MjUsLTExLjkzMjVjMC40NTY4OCwtMy43NDkwNiAtMC42NDUsLTYuNTk3ODEgLTIuMTUsLTguNDkyNWMyLjAwMjE5LC02LjgxMjgxIDYuMDg3MTksLTI0LjU1MDMxIC0wLjk2NzUsLTM1LjkwNWMtMi45NTYyNSwtNC43NTY4NyAtNy40MzA5NCwtNy43NTM0NCAtMTMuMzMsLTguOTIyNWMtMy4yNTE4NywtNC4wOTg0NCAtOS40ODY4NywtNi4yMzUgLTE3Ljg0NSwtNi4yMzV6TTExMi42NiwxMTQuNzAyNWMtNC4zNDAzMSw1LjAxMjE5IC0xMi4wMTMxMiw5LjEzNzUgLTIzLjIyLDkuMTM3NWMtMTEuNDA4NDQsMCAtMTguODY2MjUsLTQuMTkyNSAtMjMuMTEyNSwtOS4wM2MtMy4yNzg3NSwyLjc1NDY5IC04LjUxOTM3LDQuODI0MDYgLTE0LjI5NzUsNy4wOTVjLTEzLjQzNzUsNS4yODA5NCAtMzAuMTQwMzEsMTEuODExNTYgLTMxLjM5LDMyLjY4bC0wLjIxNSwzLjY1NWgxMzguMDNsLTAuMjE1LC0zLjY1NWMtMS4yNDk2OSwtMjAuODY4NDQgLTE3Ljg4NTMxLC0yNy4zOTkwNiAtMzEuMjgyNSwtMzIuNjhjLTUuODA1LC0yLjI5NzgxIC0xMS4wMzIxOSwtNC40MDc1IC0xNC4yOTc1LC03LjIwMjV6Ij48L3BhdGg+PC9nPjwvZz48L2c+PC9zdmc+"
            />
          </div>
          <div class="input">
            <input
              type="text"
              name="username"
              id="username"
              placeholder="Username"
              maxlength="25"
              required
            />
          </div>
        </div>
        <div class="password">
          <div class="icon">
            <img
              src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iMjQiIGhlaWdodD0iMjQiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDE3MnYtMTcyaDE3MnYxNzJ6IiBmaWxsPSJub25lIj48L3BhdGg+PGcgZmlsbD0iIzMzMzMzMyI+PHBhdGggZD0iTTg2LDcuMTY2NjdjLTIzLjgyMDYzLDAgLTQzLDE5LjE3OTM3IC00Myw0M3Y3LjE2NjY3Yy03Ljg4MzMzLDAgLTE0LjMzMzMzLDYuNDUgLTE0LjMzMzMzLDE0LjMzMzMzdjcxLjY2NjY3YzAsNy44ODMzMyA2LjQ1LDE0LjMzMzMzIDE0LjMzMzMzLDE0LjMzMzMzaDg2YzcuODgzMzMsMCAxNC4zMzMzMywtNi40NSAxNC4zMzMzMywtMTQuMzMzMzN2LTcxLjY2NjY3YzAsLTcuODgzMzMgLTYuNDUsLTE0LjMzMzMzIC0xNC4zMzMzMywtMTQuMzMzMzN2LTcuMTY2NjdjMCwtMjMuODIwNjMgLTE5LjE3OTM2LC00MyAtNDMsLTQzek04NiwyMS41YzE2LjMxMjcsMCAyOC42NjY2NywxMi4zNTM5NyAyOC42NjY2NywyOC42NjY2N3Y3LjE2NjY3aC01Ny4zMzMzM3YtNy4xNjY2N2MwLC0xNi4zMTI3IDEyLjM1Mzk3LC0yOC42NjY2NyAyOC42NjY2NywtMjguNjY2Njd6TTg2LDkzLjE2NjY3YzcuODgzMzMsMCAxNC4zMzMzMyw2LjQ1IDE0LjMzMzMzLDE0LjMzMzMzYzAsNy44ODMzMyAtNi40NSwxNC4zMzMzMyAtMTQuMzMzMzMsMTQuMzMzMzNjLTcuODgzMzMsMCAtMTQuMzMzMzMsLTYuNDUgLTE0LjMzMzMzLC0xNC4zMzMzM2MwLC03Ljg4MzMzIDYuNDUsLTE0LjMzMzMzIDE0LjMzMzMzLC0xNC4zMzMzM3oiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg=="
            />
          </div>
          <div class="input">
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
              maxlength="25"
              required
            />
          </div>
        </div>
        <div class="btn">
          <input class="submit" type="submit" value="Login" />
        </div>
        <div class="option">No account yet? sign up now.</div>
      </div>
    </form>
    <script src="app.js"></script>
  </body>
</html>
