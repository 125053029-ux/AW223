import Estudiante from "./components/estudiante";
import "./App.css";

export default function App(){
  const estudiantes = [
    {id:1,nombre:"Dul",carrera:"Sistemas"},
    {id:2,nombre:"Karlota",carrera:"Redes"},
    {id:3,nombre:"Ayelen",carrera:"Comercio"},
  ];
  return(
      <main className ="contenedor">
        <h1>Listado de estudiantes</h1>
        <form >
          <input type="text" placeholder="Escribe el nombre"/>
          <input type="text" placeholder="Escribe la carrera"/>
          <button type="button">Agregar</button>
        </form>
        <h2>Estudiantes Registrados</h2>
        <ul>
          {estudiantes.map((estudiante)=>(
            <Estudiante 
            key={estudiante.id}
            estudiante={estudiante}
            />
          ))
          }

        </ul>
        <p>Total de estudiantes: {estudiantes.length}</p>
      </main>
  );
}