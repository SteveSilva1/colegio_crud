<a id="readme-top"></a>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="#">
    <img src="images/logo.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">CRUD colegio</h3>
  <p align="center">
    <br />
    <a href="#">View Demo</a>
  </p>
</div>


<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.


### Installation

1. Clone the repo

2. Install dependencies

<!-- USAGE EXAMPLES -->
## Usage

Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.

```sh
  GET api/curso/all
  GET api/curso/{id} mandatory params: id(int)
  POST api/curso mandatory params: nombre(string), materia_id(int)
  PATCH api/curso mandatory params: id(int), optional params: nombre(string), materia_id(id)
  DELETE api/curso/{id} mandatory params: id(int)
  ```

  ```sh
  GET api/estudiante/all
  GET api/estudiante/{id} mandatory params: id(int)
  POST api/estudiante mandatory params: nombre(string), email(string)
  POST api/estudiante/addCurso mandatory params: curso_id(id), estudiante_id(id)
  PATCH api/estudiante mandatory params: id(int), optional params: nombre(string), email(string)
  DELETE api/estudiante/{id} mandatory params: id(int)
  ```

  ```sh
  GET api/materia/all
  GET api/materia/{id} mandatory params: id(int)
  POST api/materia mandatory params: nombre(string), optional params: descripcion(string)
  PATCH api/materia mandatory params: id(int), optional params: nombre(string), descripcion(string)
  DELETE api/materia/{id} mandatory params: id(int)
  ```

  ```sh
  GET api/nota/all
  GET api/nota/curso/{id} mandatory params: id(int)
  GET api/nota/estudiante/{id} mandatory params: id(int)
  GET api/nota/CursoAndEstudiante mandatory params: curso_id(int), estudiante_id(int)
  POST api/nota mandatory params: nota(double), curso_id(int), estudiante_id(int)
  PATCH api/nota mandatory params: nota(double), curso_id(int), estudiante_id(int)
  DELETE api/nota/{id} mandatory params: curso_id(int), estudiante_id(int)
  ```
