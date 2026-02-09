import '../css/app.css';
import { Application, Controller } from '@hotwired/stimulus';

window.Stimulus = Application.start();

Stimulus.register("hello", class extends Controller {
  connect() {
    console.log("Stimulus est vivant ! 🚀");
  }
});
