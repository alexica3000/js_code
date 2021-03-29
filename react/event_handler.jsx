// name of the event handler

onInputChange = (event) => {
    const name = event.target.name;
    const value = event.target.value;
    this.setState({
        [name]: value
    });
};
