// Avoid manual binding this

class Button extends Component {
    constructor(props) {
        super(props);
        this.state = { clicked: false };
        this.handleClick = this.handleClick.bind(this);
    }

    handleClick() {
        this.props.setState({ clicked: true });
    }

    render() {
        return <button onClick={this.handleClick}>Click me!</button>;
    };
}

class Button2 extends Component {
    constructor(props) {
        super(props);
        this.state = { clicked: false };
    }

    handleClick = () => this.setState({clicked: true });
    render() {
        return <button onClick={this.handleClick}>Click me!</button>;
    };
}
