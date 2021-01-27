<h1 align="center">
    🥨 pretzelhands/base
</h1>

This is a blank slate repository that sets up the bare minimum required to start
building any kind of PHP application. It is primarily used as the base of projects
published on [pretzelhands.com](https://pretzelhands.com). Feel free to clone this
as a starting point to code along

## 📦 Requirements

* PHP 7.4+
* Composer
* [beyondcode/expose](https://github.com/beyondcode/expose)

## 👩‍💻 Getting started

To get started, install the dependencies via Composer:

```bash
$ composer install
```

Then rename `.env.example` to `.env`, to enable loading of environment values.
Afterwards you can get an instantly shareable public link to your project by
running the following:

```bash
$ composer run dev
```

Alternatively you can also look at your project at `localhost:8080`. For
more details on how Expose works, refer to [the documentation](https://beyondco.de/docs/expose/introduction).

## ⚡️ What's included

* Pre-configured PSR-4 autoloading
* `dev` Composer command to get a public link usable for webhooks etc
* `.env` file loading and a helper function to get env values

## 🐛 Issue reporting

If you have any troubles setting up this project with any information
you can provide and I'll help you get it running


## 🥨 Learn more

If you'd like to see more repositories and tutorials like this,
consider [following me on Twitter](https://twitter.com/pretzelhds)
or [subscribing to my newsletter](https://pretzelhands.com/newsletter).

