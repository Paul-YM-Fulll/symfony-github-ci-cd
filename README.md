## Get started

### Install symfony project

To install a Symfony project, run the following command in your terminal:

```bash
make docker-install
```

This command will install the necessary dependencies and set up a Docker container for your project.

### Access the Symfony project

Once the installation is complete, you can access the project in your web browser at http://0.0.0.0:8080/.

### Access the container shell

If you need to access the shell of the Docker container, you can do so by running the following command:

```bash
sudo chmod -R 777 .git
make docker-sh
```

This will give you access to the container's command line interface.

# Integrating Fly.io into your Github actions pipeline

## Installing flyctl

On Mac : `brew install flyctl` or `curl -L https://fly.io/install.sh | sh` <br />
On Linux : `curl -L https://fly.io/install.sh | sh` <br />
On Windows Powershell : `pwsh -Command "iwr https://fly.io/install.ps1 -useb | iex"` <br />

## Sign up to Fly, then Sign in

`fly auth signup`

`fly auth login`

## Launch the fly project

Run `fly launch` and follow the steps

## Generating the FLY_API_TOKEN: ${{ secrets.FLY_API_TOKEN }}

Step 1 : run `flyctl tokens create deploy`

Step 2 : Copy the entire returned token.

Step 3 : Navigate to your github repository -> settings -> Security -> Secrets and Variables

Step 4 : Create the FLY_API_TOKEN secret, with the token being the value
