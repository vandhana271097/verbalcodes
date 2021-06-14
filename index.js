import React from 'react';
import ReactDOM from 'react-dom';
import "./index.css";
import App from './App';
import { initialState } from "./reducer";

ReactDOM.render(
  <React.StrictMode>
    <StateProvider initialState={initialstate} reducer=
      {reducer}>
      <App />
      </StateProvider>
    </React.StrictMode>,
  document.getElementById('root')                       
);

